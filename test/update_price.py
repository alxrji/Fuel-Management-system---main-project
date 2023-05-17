
from selenium import webdriver
import time
from selenium.webdriver.common.alert import Alert


print("Login test case started")
options = webdriver.ChromeOptions()
options.add_experimental_option('excludeSwitches', ['enable-logging'])
driver = webdriver.Chrome(options=options)
driver.maximize_window()
driver.get("http://localhost/fuel/login/index.php")
driver.find_element("name", "username").send_keys("admin")
time.sleep(2)
driver.find_element("name", "passwd").send_keys("admin")
time.sleep(2)
driver.find_element("xpath", "/html/body/div[1]/div/div/form/div[5]/button").click()
time.sleep(2)
# alert = Alert(driver)
# alert.accept()
print("Admin Logged In")
current_url= driver.current_url
curl="http://localhost/fuel/admin/index.php"

if current_url == curl:
    print("Login successful")
else:
    print("Login failed")

driver.find_element("xpath", "/html/body/div/aside/div[2]/nav/ul/li[3]/a").click()
time.sleep(2)
driver.find_element("xpath", "/html/body/div/div/div/div/div/div/form/div[1]/div/select").click()
time.sleep(2)
driver.find_element("xpath", "/html/body/div/div/div/div/div/div/form/div[1]/div/select/option[2]").click()
time.sleep(2)
driver.find_element("name", "fuel-price").send_keys("102")
time.sleep(2)
driver.find_element("name", "fuel-stock").send_keys("500")
time.sleep(2)
driver.find_element("xpath", "/html/body/div/div/div/div/div/div/form/div[2]/button").click()
time.sleep(2)
alert = Alert(driver)
alert.accept()
time.sleep(2)
curl="http://localhost/fuel/admin/fuels.php"
current_url= driver.current_url

if current_url == curl:
    print("Price update successful")
else:
    print("Price update failed")

