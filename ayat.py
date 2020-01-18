import requests,bs4,os
os.system("clear")
hasil = []
count = 0
surah = raw_input("Surah : ")
url = "https://litequran.net/"
r = requests.get(url+surah)
bb = bs4.BeautifulSoup(r.text,"html.parser")
for x in bb.find_all("li"):
 count+=1
 for a in x.find_all("span",{"class":"ayat"}):
  h = a.text
 for b in x.find_all("span",{"class":"bacaan"}):
  j = b.text
 for c in x.find_all("span",{"class":"arti"}):
  k = c.text
 print """
<div class='panel panel-default'><div class='panel-heading'><p class='right'>%s</p></div><div class='panel-body'><p class='left'>%s. %s<hr><i>%s</i></p></div></div>
"""%(h,count,j,k)
