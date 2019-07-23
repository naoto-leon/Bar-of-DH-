# Bar-of-DH-

#### いくつかの質問に答えるとプロフィールが製作されるアプリ。
*** 
##### [デジハリの酒場](http://dh.mimoza.jp/top.php)
###### イラスト・ロゴデータに関しては友人に製作をお願いしました。　

□ モバイル版のみ対応。　
□ データベース利用　

***

##### 斜めのデザイン

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

##### 質問に答えるとプロフィールが作られる機能　

ユーザーの選択欄と実際のデータベースへの書き換えを変える事を中心に全体の設計をおこなった。 

`
echo '<option value="愛を守りし">友人と楽しく過ごす</option>';  
echo '<option value="逆鱗する">アウトドアや運動をして過ごす</option>';  
echo '<option value="深淵に漂う">家で過ごす</option>';  
echo '<option value="宿命を背負いし">自己投資や仕事に備える</option>'; 
`
echo '<option value="宿命を背負いし">自己投資や仕事に備える</option>';   
