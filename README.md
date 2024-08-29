# StatusApi

The **StatusApi** module is an extension for Magento that allows you to list order statuses created in the platform. These statuses are used to manage the order flow in Magento, making it easier to control and automate purchasing processes.

## Features

- List all order statuses configured in Magento.
- Simplify integration with external systems that need to query order statuses.

## Requirements

- Magento 2.x

## Installation

Follow the steps below to install the **StatusApi** module:

1. Clone the repository into the `app/code/CyberFire/StatusApi` directory of your Magento installation:
    ```bash
    git clone https://github.com/israelguido/StatusApi.git app/code/CyberFire/StatusApi
    ```

2. Enable the module:
    ```bash
    php bin/magento module:enable CyberFire_StatusApi
    ```

3. Update the database:
    ```bash
    php bin/magento setup:upgrade
    ```

4. Clear Magento cache:
    ```bash
    php bin/magento cache:clean
    php bin/magento cache:flush
    ```

## Usage

After installation, the module provides an API accessible via the endpoint:

``` /rest/V1/statusapi ``` 


### Request Example

To get the list of order statuses, make a GET request to the endpoint above:

```bash
curl -X GET "https://your-domain.com/rest/V1/statusapi" -H "Authorization: Bearer <your_token>"
```

### Response Example
```
[
    {
        "status": "pending",
        "label": "Pending"
    },
    {
        "status": "processing",
        "label": "Processing"
    },
    {
        "status": "complete",
        "label": "Complete"
    }
]
```