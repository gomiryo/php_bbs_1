# php_bbs_1

PHPの学習用にサンプルプログラムを使用して…

BBSに機能を加えたり改造して遊んでみます。

# 元のソース

## 特に利用規約は書いていない小規模なコードのため、勝手に使わせていただきました。

参考URL: http://meideru.com/archives/1415#i-4

※さすがに勝手に使うのは良くないと思い…現在、作者に使用許諾をとっているところです（申請中）2019/11/12

# create tabel 文

create table thread1(number int NOT NULL AUTO_INCREMENT, name varchar(20), time datetime DEFAULT NULL, content varchar(600), PRIMARY KEY(number));

