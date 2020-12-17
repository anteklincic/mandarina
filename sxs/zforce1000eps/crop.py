import os
import re
import stat
arr = os.listdir()
arr.remove('crop.py')

regex = re.compile('img[0-9]')
to_crop = [el for el in arr if regex.match(el)]

f = open("crop.sh", "a")

for el in to_crop:
    # print(f"convert {el} -crop +0+150 -crop -0-150 {el}")
    f.write(f"convert {el} -crop +115+195 -crop -105-195 {el}\n")
    number = el[3]
    extension = el.split(".")[-1]
    # f.write(f"convert {el} -resize 450x315 img{number}-thumbnail.{extension}\n")

f.close()
os.chmod("crop.sh", 0o775)

