class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'company_id',
        'category_id',
        'name',
        'sku',
        'barcode',
        'purchase_price',
        'selling_price',
        'wholesale_price',
        'minimum_stock',
        'current_stock',
        'vat_rate',
        'image',
        'track_stock',
        'is_active',
    ];

    protected $casts = [
        'purchase_price' => 'decimal:2',
        'selling_price' => 'decimal:2',
        'wholesale_price' => 'decimal:2',
        'vat_rate' => 'decimal:2',
        'track_stock' => 'boolean',
        'is_active' => 'boolean',
    ];
}
