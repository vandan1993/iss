## Resize Width and Height of a Canvas/Image Test for ISS Governance

## Built In

- PHP 8.1
- Composer 2

## Implemented 
- Strategy design pattern
- Object-Oriented approach
- Namespaces
- SPL autoloading
- Interfaces
- Traits
- Contain Method 
- Cover Methos
- Psr 4 standard 

## How Run application 
In `/iss` folder excute  php -S 127.0.0.1:7000

`Note :- No need to run composer install as all vendor code is commited .`

## Main File of execution

Main file is `index.php` 

In this file we need to create the object of Canvas Class with the Strategy Interface need to go for (Contain and Canvas).
Please find the  implemetation below .

```
Image A and Image B Input 
$imageA = ['width' => 180, 'height' => 180];
$imageB = ['width' => 360, 'height' => 200];

For Contian Method 
$constructImage = new Canvas(new Contain);
$contain = $constructImage->checkForRezise($imageA , $imageB);
echo($contain);

For Cover Method 
$constructImage = new Canvas(new Cover);
$cover = $constructImage->checkForRezise($imageA , $imageB);
echo($cover);
```
