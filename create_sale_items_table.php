Schema::create('sale_items', function (Blueprint $table){

    $table->id();

    $table->foreignId('sale_id')->constrained()->cascadeOnDelete();

    $table->foreignId('product_id')->constrained()->cascadeOnDelete();

    $table->decimal('quantity',12,2);

    $table->decimal('price',18,2);

    $table->decimal('discount',18,2)->default(0);

    $table->decimal('vat',18,2)->default(0);

    $table->decimal('total',18,2);

    $table->timestamps();
});
