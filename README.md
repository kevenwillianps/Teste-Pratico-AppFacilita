# Projeto Laravel

## ✨ Descrição
Este é um projeto desenvolvido com Laravel, focado no **controle de livros, usuários e empréstimos**. Ele permite o gerenciamento eficiente dessas entidades, proporcionando uma interface moderna e interativa.

## ⚡ Requisitos
Antes de iniciar a instalação, certifique-se de que seu ambiente atende aos seguintes requisitos:

- **PHP 8.1+**
- **Composer** (https://getcomposer.org/)
- **MySQL 8.0+**
- **Node.js 16+** (para compilar os assets, se necessário)
- **NPM ou Yarn** (para dependências do frontend, caso aplicável)

## 🛠️ Instalação
Siga os passos abaixo para configurar e rodar o projeto:

### 1. Clonar o repositório
```sh
git clone https://github.com/kevenwillianps/Teste-Pratico-AppFacilita.git
cd Teste-Pratico-AppFacilita
```

### 2. Instalar dependências do PHP
```sh
composer install
```

### 3. Configurar variáveis de ambiente
Copie o arquivo `.env.example` para `.env` e configure as credenciais do banco de dados e outras configurações necessárias.
```sh
cp .env.example .env
```

### 4. Gerar chave da aplicação
```sh
php artisan key:generate
```

### 5. Criar o banco de dados e rodar migrations
Certifique-se de que seu banco de dados MySQL está rodando e configurado corretamente no arquivo `.env`. Depois, execute:
```sh
php artisan migrate
```

### 6. Popular o banco com seeders
Este projeto inclui seeders para criar usuários e dados iniciais automaticamente. Execute:
```sh
php artisan db:seed
```

### 7. Compilar assets do frontend (se aplicável)
Caso o projeto utilize assets compilados via Vite:
```sh
npm install && npm run build  # ou
yarn install && yarn build
```

### 8. Rodar servidor de desenvolvimento
```sh
php artisan serve
```
A aplicação estará disponível em `http://127.0.0.1:8000`.

---

## 📝 Observers
O projeto inclui **observers** para monitorar as operações dos modelos e garantir regras de negócio consistentes. 
Os observers estão localizados em `app/Observers/` e são registrados no `AppServiceProvider.php`.
---

## 💎 Tecnologias Utilizadas
- **Laravel 10+** - Framework PHP robusto
- **MySQL** - Banco de dados relacional
- **Vite** - Compilador moderno para assets (se aplicável)

---

## ⚖️ Licença
Este projeto está licenciado sob a [MIT License](LICENSE).

---
