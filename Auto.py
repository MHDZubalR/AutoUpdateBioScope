python
import requests
import time

while True:
    response = requests.get("https://mhdzubair.top/ARAFAT/biom3u8grab.php")
    with open("output.txt", "w") as file:
        file.write(response.text)
    time.sleep(120)  # 30 minutes interval
