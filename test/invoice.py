
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
# alert = Alert(driver)
# alert.accept()
print("User Logged In")
current_url= driver.current_url
curl="http://localhost/fuel/fuelstation/index.php"

if current_url == curl:
    print("Login successful")
else:
    print("Login failed")

driver.find_element("xpath", "/html/body/div[3]/aside/div[2]/nav/ul/li[4]/a").click()
time.sleep(30)
print("Orders viewed")
driver.find_element("xpath", "/html/body/div/div/div/div/div/div/div/div[1]/div/div/div/form/div/button").click()
time.sleep(5)
curl="http://localhost/fuel/fuelstation/bill.php"
current_url= driver.current_url
if current_url==curl:
    print("Invoice viewed")
else:
    print("Test failed")
