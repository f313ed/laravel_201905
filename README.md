# Tdd
## tddブランチ

## 環境構築

#### サーバ初期化
1. docker stop $(docker ps -q)
2. docker rm $(docker ps -q -a)

#### 構築
1. docker-compose build && docker-compose up -d && docker-compose exec php laravel new laravel
2. cp ../.env src/laravel/

## APIエンドポイントの作成
#### 不要ファイルの削除
1. cd src/laravel
2. rm -rf tests/Feature/ExampleTest.php
3. rm -rf database/migrations/2014_10_12_000000_create_users_table.php
4. rm -rf database/migrations/2014_10_12_100000_create_password_resets_table.php

#### テストファイルの作成
1. docker-compose exec php php ./laravel/artisan make:test ReportTest
2. vi ReportTest.php
3. docker-compose exec php php laravel/vendor/bin/phpunit


#### テストの実行
1. docker-compose exec php /bin/bash
2. cd laravel
3. php vendor/bin/phpunit

## model
1. docker-compose exec php php ./laravel/artisan make:model Customer -f -m






end
