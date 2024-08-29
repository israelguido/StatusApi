<?php

namespace Bistwobis\StatusApi\Model;

use Bistwobis\StatusApi\Api\OrderStatusRepositoryInterface;
use Magento\Sales\Model\ResourceModel\Order\Status\CollectionFactory;
use Magento\Sales\Api\Data\OrderStatusInterface;
use Magento\Framework\Api\SimpleDataObjectConverter;

class OrderStatusRepository implements OrderStatusRepositoryInterface
{
    /**
     * @var CollectionFactory
     */
    protected $statusCollectionFactory;

    /**
     * @param CollectionFactory $statusCollectionFactory
     */
    public function __construct(
        CollectionFactory $statusCollectionFactory
    ) {
        $this->statusCollectionFactory = $statusCollectionFactory;
    }

    /**
     * {@inheritdoc}
     */
    public function getList()
    {
        $collection = $this->statusCollectionFactory->create();
        $statuses = [];

        foreach ($collection as $status) {
            $statuses[] = [
                'status' => $status->getStatus(),
                'label' => $status->getLabel()
            ];
        }

        return $statuses;
    }
}
