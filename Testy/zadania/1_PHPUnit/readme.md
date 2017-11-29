**Każde zadanie powinno być rozwiązane w osobnym pliku**.

## Cześć PHPUnit

### Zadanie 1 rok przestępny &ndash; zadania rozwiązywane z wykładowcą
W pliku zad1.php znajduje się funkcja, która przyjmuje liczbę całkowitą (oznaczającą rok) i zwraca `true` 
&ndash; jeżeli rok jest przestępny lub zwraca `false` jeżeli nie.
Napisz testy do tej funkcji sprawdzając poprawność zwracanego typu i poprawność wskazań.


### Zadanie 2 Liczba na string
W pliku z zadaniem zad2.php znajduje się kod realizujący poniższe zadanie.    
    Napisz funkcję zamieniającą liczbę na zapis słowny tej liczby. 
    Np. 143 zamieni na „sto czterdzieści trzy”. 
    Liczby mają być w zakresie do tysiąca (ale bez tysiąca).
Do tej funkcji należy zaprojektować testy, które zdiagnozują błąd.
Podstawowe trzy przypadki testowe to:
  * sprawdzanie liczby mniejszej od 10
  * liczba większa od 10 ale mniejsza od 20
  * powyżej 100
  
Popraw kod po napisaniu testów.


### Zadania 3 FizzBuzz
W pliku z zad3.php jest funkcja przyjmująca liczbę całkowitą jako parametr oraz
zwracająca liczby od 1 do podanej liczby, korzystając dodatkowo z poniższych założeń:
* w miejsce liczb podzielnych przez 3 wypisuje `Fizz`,
* w miejsce liczb podzielnych przez 5 wypisuje `Buzz`,
* w miejsce liczb podzielnych przez 3 i 5 wypisuje `BuzzFizz`.

Napisz test dla każdego z trzech powyższych założeń sprawdzając czy zwracana
jest prawidłowa wartość.


### Zadanie 4 Kalkulator
W pliku zad4.php znajduje się klasa kalkulatora oraz metody realizujące działania matematyczne.
Dopisz testy do każdej z metod matematycznych sprawdzając różne argumenty oraz poprawność zwracanych wyników.
W przypadku konieczności zmodyfikuj kod aby zwracał poprawne wartości.


### Zadanie 5 BankAccount
BankAccount - klasa, która realizuje funkcjonalność konta bankowego znajduje się w pliku zad5.php.
Przeanalizuj działanie kodu oraz napisz następujące testy:

1. Test sprawdzający konstruktor. Test powinien sprawdzić czy atrybut cash jest wyzerowany. 
2. Test do metody depositCash($amount) sprawdzający działanie w przypadku różnych 
nieprawidłowych typów argumentu oraz wartości. 
3. Test do metody withdrawtCash($amount) w przypadku podania większej kwoty niż ta zapisana w atrybucie $cash.
4. Test do metody printInfo, która ma zwrócić wartość prywatnego atrybutu $cash.
 
Czy udało się zlokalizować błąd/błędy ?
