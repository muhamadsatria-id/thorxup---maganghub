<?php

namespace App\Models;

use Database\Factories\InquiryFactory;
use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Inquiry extends Model
{
    /** @use HasFactory<InquiryFactory> */
    use HasFactory;

    public const STATUSES = [
        'new' => 'Baru',
        'read' => 'Dibaca',
        'replied' => 'Dibalas',
        'closed' => 'Selesai',
    ];

    protected $fillable = [
        'name',
        'company',
        'email',
        'phone',
        'product_id',
        'quantity',
        'subject',
        'message',
        'status',
        'admin_notes',
    ];

    protected function casts(): array
    {
        return [
            'quantity' => 'integer',
        ];
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    #[Scope]
    protected function unread(Builder $query): void
    {
        $query->where('status', 'new');
    }

    public function statusLabel(): string
    {
        return self::STATUSES[$this->status] ?? ucfirst((string) $this->status);
    }
}
