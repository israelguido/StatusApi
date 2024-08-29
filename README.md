# StatusApi

O módulo **StatusApi** é uma extensão para o Magento que permite listar os status de pedidos criados na plataforma. Esses status são usados para gerenciar o fluxo de pedidos no Magento, facilitando o controle e automação dos processos de compra.

## Funcionalidades

- Listar todos os status de pedidos configurados no Magento.
- Simplificar a integração de sistemas externos que precisam consultar os status de pedidos.

## Requisitos

- Magento 2.4.x

## Instalação

Siga os passos abaixo para instalar o módulo **StatusApi**:

1. Clone o repositório para o diretório `app/code/IsraelGuido/StatusApi` do seu Magento:
    ```bash
    git clone https://github.com/israelguido/StatusApi.git app/code/CyberFire/StatusApi
    ```

2. Habilite o módulo:
    ```bash
    php bin/magento module:enable CyberFire_StatusApi
    ```

3. Atualize o banco de dados:
    ```bash
    php bin/magento setup:upgrade
    ```

4. Limpe o cache do Magento:
    ```bash
    php bin/magento cache:clean
    php bin/magento cache:flush
    ```

## Uso

Após a instalação, o módulo disponibiliza uma API que pode ser acessada através do endpoint:


