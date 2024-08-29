<?php

namespace Bistwobis\StatusApi\Api;

interface OrderStatusRepositoryInterface
{
    /**
     * Retorna a lista de status de pedidos.
     *
     * @return \Magento\Sales\Api\Data\OrderStatusInterface[]
     */
    public function getList();
}
