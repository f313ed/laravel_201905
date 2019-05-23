# docker-laravel

## ブランチ
- sample: サンプルです



## 環境構築方法
### 1. git clone
```
git clone https://5next.backlog.jp/git/SRE/docker_laravel.git
 または、git clone 5next@5next.git.backlog.jp:/SRE/docker_laravel.git
```
```
cd docker-laravel
```
ブランチの切り替え
```
git fetch && git checkout sample
```

### 2. セットアップ
```
docker-compose build && docker-compose up -d && docker-compose exec php laravel new laravel
```

### 3. 確認
```
curl http://localhost:8080
docker-compose exec php node -v
docker-compose exec php composer --version
docker-compose exec php php -v
mysql -h 0.0.0.0 --port 13306 -u homestead -psecret
mysql -h 0.0.0.0 --port 13306 -u root -proot
redis-cli -h 0.0.0.0 -p 16379

.env書換え
DB_HOST=127.0.0.1 → DB_HOST=mysql
docker-compose exec php php ./sample/artisan migrate
```

### 4. 削除
```
docker-compose down && docker rmi $(docker images -q)
rm -rf ./src && mkdir src
```