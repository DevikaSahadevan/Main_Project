from selenium import webdriver
import time
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.common.action_chains import ActionChains
from selenium.webdriver.common.by import By
from selenium.webdriver.support.ui import Select
print("Login test case started")
options=webdriver.ChromeOptions()
options.add_experimental_option('excludeSwitches',['enable-logging'])
driver = webdriver.Chrome(options=options)
driver.maximize_window()
driver.get("http://localhost/child/login.php")
driver.find_element("id", "name").send_keys("pooja@gmail.com")
time.sleep(2)
driver.find_element("id", "email").send_keys("Pooja@20")
time.sleep(3)
driver.find_element("xpath", "/html/body/div/div[3]/div/div/div/div/div/form/div/div[3]").click()
time.sleep(3)
print("User Logged In")
driver.find_element("xpath", "//*[@id='navbarCollapse']/div/a[2]").click()
time.sleep(2)
text_area = driver.find_element("xpath","//*[@id='msg']")
text_area.send_keys("Its good!")
time.sleep(2)
driver.find_element("xpath", "/html/body/div/div[3]/div/div/div/div/div/form/div/div[3]/button").click()
time.sleep(2)
print("Feedback added")

