from flask import Flask, jsonify
import pandas as pd
from sklearn.linear_model import LinearRegression

app = Flask(__name__)

# Load historical data
df = pd.read_csv('pricelist.csv')

# Split data into training and testing sets
train = df[df['Year'] < 2023]
test = df[df['Year'] == 2023]

# Train the model on the training data
X_train = train[['Year', 'Month']]
y_train_petrol = train['Petrol Price']
y_train_diesel = train['Diesel Price']
y_train_cng = train['CNG Price']

model_petrol = LinearRegression().fit(X_train, y_train_petrol)
model_diesel = LinearRegression().fit(X_train, y_train_diesel)
model_cng = LinearRegression().fit(X_train, y_train_cng)

@app.route('/predict', methods=['GET']) 
def predict_prices():
    # Predict prices for the test data
    X_test = test[['Year', 'Month']]
    petrol_price_prediction = model_petrol.predict(X_test)
    diesel_price_prediction = model_diesel.predict(X_test)
    cng_price_prediction = model_cng.predict(X_test)

    # Create a dictionary of predicted prices
    predicted_prices = {
        'petrol_price': petrol_price_prediction[0],
        'diesel_price': diesel_price_prediction[0],
        'cng_price': cng_price_prediction[0]
    }

    # Return the predicted prices as a JSON response
    return jsonify(predicted_prices)

if __name__ == '__main__':
    app.run(debug=True)
