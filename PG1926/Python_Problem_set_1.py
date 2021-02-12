print('''Fizzbuzz aslında başlangıcı ve sonu verilen iki sayı arasındaki tüm sayıları ekrana yazdırmaktır.
Lütfen başlngıç ve bitiş sayınızı aşağıya...''')
baslangıcSayi=int(input("Başlangıç sayınızı yazınız: "))
bitisSayi=int(input("Bitiş sayınızı yazınız: "))
while baslangıcSayi<bitisSayi+1:
    if baslangıcSayi%3==0 and baslangıcSayi%5==0:
        print("FizzBuzz")
       
    elif baslangıcSayi%3==0:
        print("Fizz")
       
    elif baslangıcSayi%5==0:
        print("Buzz")
        
    else:
        print(baslangıcSayi)
        
    baslangıcSayi+=1