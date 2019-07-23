# Bar-of-DH-

#### いくつかの質問に答えるとプロフィールが製作されるアプリ。
*** 
##### [デジハリの酒場](http://dh.mimoza.jp/top.php)
###### イラスト・ロゴデータに関しては友人に製作をお願いしました。　

□ モバイル版のみ対応。　
□データベース利用　

***

#####斜めのデザイン

特に難しいことはしていないが、IPhone5SEやXでTextに微妙なずれが生じたりするため、transform rotateの値を都度調整する必要があり、やたらと@media screen
の多いCSSとなってしまった。　

斜めラインのcssはBorderで実装

section_5::after {    
content: '';  
display:  block;  
position:  absolute;     
left:  0;   
bottom:  0;   
border-top: 60px solid  rgba(229,229,218,1.00);   
border-left: 50vw solid  rgba(229,229,218,1.00);   
border-right: 50vw solid  rgba(229,78,78,1.00);   
border-bottom: 60px solid  rgba(229,78,78,1.00);      
}  

<img width="210" alt="Dh_Bar1" src="https://user-images.githubusercontent.com/43961147/61700928-419d0100-ad78-11e9-9e90-0713bbe26dca.png">

***
