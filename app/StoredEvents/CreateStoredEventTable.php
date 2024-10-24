<?php

namespace App\StoredEvents;

use Tempest\Database\Migration;
use Tempest\Database\QueryStatement;
use Tempest\Database\QueryStatements\CreateTableStatement;

final readonly class CreateStoredEventTable implements Migration
{
    public function getName(): string
    {
        return '00-00-0000-create_stored_events_table';
    }

    public function up(): QueryStatement|null
    {
        return CreateTableStatement::forModel(StoredEvent::class)
            ->primary()
            ->text('uuid')
            ->text('eventClass')
            ->text('payload')
            ->datetime('createdAt');
    }

    public function down(): QueryStatement|null
    {
        // TODO: Implement down() method.
    }
}