Schema::create('products', function (Blueprint $table) {
    $table->id();

    $table->foreignId('company_id')->constrained()->cascadeOnDelete();
    $table->foreignId('category_id')->constrained()->cascadeOnDelete();

    $table->string('name');
    $table->string('sku')->unique();
    $table->string('barcode')->unique();

    $table->decimal('purchase_price', 18, 2)->default(0);
    $table->decimal('selling_price', 18, 2)->default(0);
    $table->decimal('wholesale_price', 18, 2)->default(0);

    $table->integer('minimum_stock')->default(0);
    $table->integer('current_stock')->default(0);

    $table->decimal('vat_rate', 5, 2)->default(5.00);

    $table->string('image')->nullable();

    $table->boolean('track_stock')->default(true);
    $table->boolean('is_active')->default(true);

    $table->timestamps();
    $table->softDeletes();
});
