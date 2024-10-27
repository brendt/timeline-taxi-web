<?php

namespace App\Analytics;

use Tempest\Database\Migration;
use Tempest\Database\QueryStatement;
use Tempest\Database\QueryStatements\CreateTableStatement;

final readonly class VisitsPerDayPerPageMigration implements Migration
{
    public function getName(): string
    {
        return '2024-10-24-01_create_visits_per_day_per_page_table';
    }

    public function up(): QueryStatement|null
    {
        return CreateTableStatement::forModel(VisitsPerDayPerPage::class)
            ->primary()
            ->integer('visits', unsigned: true)
            ->text('uri')
            ->date('date');
    }

    public function down(): QueryStatement|null
    {
        // TODO: Implement down() method.
    }
}