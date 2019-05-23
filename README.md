# docker_laravel
## masterブランチ
## ローカル環境初期用
- git clene
```
git clone 5next@5next.git.backlog.jp:/MCG/mcg_usukitest.git
```
- ディレクトリ名変更
```
mv mcg_usukitest docker_laravel
git checkout -b 作成するブランチ名
git push -u origin 作成したブランチ名
```
- 環境ビルド & Laravelインストール 
docker-compose build && docker-compose up -d && docker-compose exec php laravel new laravel