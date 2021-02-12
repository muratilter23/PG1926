#liste=[2,4,1,6,4,9,13,11]
print("Girmiş olduğunuz sayı dizisi içerisindeki, en büyük tek sayı ekrana yazdırılacaktır.")
liste=[]
liste_uzunluk=int(input("Listenizin eleman sayısını belirtiniz: "))
for c in range(liste_uzunluk):
  sayi=int(input("Listeye eklenecek sayıyı giriniz: "))
  liste.append(sayi)

print("Girmiş olduğunuz sayı dizisi: ")
print(liste)
liste.sort()
uzunluk=len(liste)
print("Girmiş olduğunuz sayılara göre en büyük tek sayınız: ")
for i in range(uzunluk,-1,-1):
 if liste[i]%2!=0:
   print(liste[i])
   break

