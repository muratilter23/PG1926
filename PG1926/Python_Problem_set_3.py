#liste=[2,4,1,6,4,0,0]
print("Bu programda sizden bir sayı dizisi girmeniz isteniyor.")
print("Sizin girmiş olduğunuz bu sayı dizisindeki sıfırları en başa taşıyacaktır.")
liste=[]
"""#Kullanıcıdan listesinin kaç sayıdan oluşmasını istediği soruluyor"""
liste_uzunluk=int(input("Listenizin eleman sayısını belirtiniz: "))
"""#For döngüsü yardımıyla kaç adet belirtilmişse
   o kadar eleman girilecek ve listemize append edilecektir.
  """
for c in range(liste_uzunluk): 
  sayi=int(input("Listeye Eklenecek Sayıları Giriniz: "))
  liste.append(sayi)

print("Girmiz olduğunuz sayı dizisi " )
print(liste)
uzunluk=len(liste)
#print(uzunluk)
for i in range(uzunluk):#Listedeki değer sayısına göre for döngüsü çalışır.
  if liste[i]==0: #Sıfır değerinin kaçıncı indekste olduğunu tespit edilir.
    liste.pop(i)    #İndeks sayısında bulunan değeri siler.
    liste.insert(0,0)#Sıfır sayısını indeksin en başına eklememizi sağlar.
print("Sıfırların başta olduğu sayı diziniz: ")
print(liste)
