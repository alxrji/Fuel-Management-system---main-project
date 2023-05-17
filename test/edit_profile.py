
from selenium import webdriver
import time
from selenium.webdriver.common.alert import Alert


print("Login test case started")
options = webdriver.ChromeOptions()
options.add_experimental_option('excludeSwitches', ['enable-logging'])
driver = webdriver.Chrome(options=options)
driver.maximize_window()
driver.get("http://localhost/fuel/login/index.php")
driver.find_element("name", "username").send_keys("alnsh")
time.sleep(2)
driver.find_element("name", "passwd").send_keys("1234")
time.sleep(2)
driver.find_element("xpath", "/html/body/div[1]/div/div/form/div[5]/button").click()
time.sleep(2)
print("User Logged In")
current_url= driver.current_url
curl="http://localhost/fuel/fuelstation/index.php"

if current_url == curl:
    print("Login successful")
else:
    print("Login failed")

driver.find_element("xpath", "/html/body/div[3]/aside/div[2]/nav/ul/li[6]/a").click()
time.sleep(2)
input_field = driver.find_element("name", "fname")
input_field.clear()
input_field.send_keys("shijo")
time.sleep(2)

input_field = driver.find_element("name", "lname")
input_field.clear()
input_field.send_keys("A")
time.sleep(2)

input_field = driver.find_element("name", "phone")
input_field.clear()
input_field.send_keys("8786785678")
time.sleep(2)

input_field = driver.find_element("name", "house")
input_field.clear()
input_field.send_keys("sdfgh")
time.sleep(2)

input_field = driver.find_element("name", "place")
input_field.clear()
input_field.send_keys("Kottayam")
time.sleep(2)

driver.find_element("xpath", "/html/body/div/div/div[2]/div/div[2]/form/button").click()
time.sleep(2)
print("Update successful")