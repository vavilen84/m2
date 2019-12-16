<?php

namespace Mageplaza\HelloWorld\Setup;
class UpgradeSchema implements \Magento\Framework\Setup\UpgradeSchemaInterface
{
    public function upgrade(
        \Magento\Framework\Setup\SchemaSetupInterface $setup,
        \Magento\Framework\Setup\ModuleContextInterface $context)
    {
        $installer = $setup;
        $installer->startSetup();


        if (version_compare($context->getVersion(), '1.0.4', '<')) {
           // $installer->getConnection()->query('ALTER TABLE mageplaza_topic ADD COLUMN comment_2 varchar(255) null default null');
            $installer->getConnection()->addColumn(
                $installer->getTable('mageplaza_topic'),
                'comment_3',
                [
                    'type' => \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                    'length'    => 255,
                    'nullable' => true,
                    'default' => null,
                    'comment' => 'Comment'
                ]
            );
        }

        $installer->endSetup();
    }


}