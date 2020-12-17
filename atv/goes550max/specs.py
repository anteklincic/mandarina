import os
import re
import stat

with open('specifications') as f:
    content = f.readlines()
content = [x.strip() for x in content] 


    

f = open("specifications.html", "w")
f.write(''' 
<div class="container-fluid no-padding">
  <div class="row">
    <div class="col-md-12">
      <h2 class="text-center">SPECIFICATIONS</h2>
    </div>
  </div>
</div>
<div class="container-fluid no-padding">
  <div class="row">
    <div class="col-lg-6 offset-lg-3 ">
      <table class="table">
        <tbody>
''')

i = 0
while i < len(content):
    f.write(f'''<tr>
            <td class="left">{content[i]}</td>
            <td>
              <p class="text-right">{content[i+1]}</p>
            </td>
          </tr>''')
    i+=2

f.write('''
        </tbody>
      </table>
    </div>
  </div>
</div>
''')


f.close()

