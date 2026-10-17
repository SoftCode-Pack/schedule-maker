# Schedule-maker
---
## About app structure

- **yii2 framework:** the application is built with this MVC structured php framework. [See yii2 documentation][yii2_doc_link]
[yii2_doc_link]:https://www.yiiframework.com/doc/guide/2.0/en

- **react:**: for complex design I use react js through inertia which is an extension that creates an API layer between yii2 and react [See inertia documentation][inertia_doc_link]
[inertia_doc_link]:https://crenspire.github.io/yii2-inertia/guide/introduction

---

## Install and run (linux)

### Requirements

- node (version 24 <)

- docker (version 17.04 <)

### Commands

- In project root (/scedule-maker). Copy env example into env, you can modify it.

```bash
cp .env.example .env
```

- start the docker

```bash
docker compose up -d
```

- install yii2 dependencies:

```bash
docker compose exec app composer install
```

- giving permission to ngnix

```bash
sudo chown -R www-data:www-data ./app/runtime ./app/web/assets
```

- install react dependecies:

```bash
cd app/react_frontend/
npm install
```

- run react

```bash
npm run dev
```

- stop docker (in project root)
 
```bash
docker compose down
```
---