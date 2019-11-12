# php_bbs_1

PHPの学習用にサンプルプログラムを使用。

BBSに機能を加えて改造して遊んでみました。

# 元のソース

## 特に利用規約は書いていない小規模なコードのため、勝手に使わせていただきました。

参考URL: http://meideru.com/archives/1415#i-4

# create tabel 文

create table thread1(number int NOT NULL AUTO_INCREMENT, name varchar(20), time datetime DEFAULT NULL, content varchar(600), PRIMARY KEY(number));

