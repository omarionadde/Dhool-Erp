Schema::create('sales', function (Blueprint $table) {
    $table->id();

    $table->foreignId('company_id')->constrained()->cascadeOnDelete();
    $table->foreignId('branch_id')->constrained()->cascadeOnDelete();
    $table->foreignId('customer_id')->nullable()->constrained()->nullOnDelete();
    $table->foreignId('user_id')->constrained()->cascadeOnDelete();

    $table->string('invoice_number')->unique();

    $table->decimal('subtotal',18,2);
    $table->decimal('discount',18,2)->default(0);
    $table->decimal('vat',18,2)->default(0);
    $table->decimal('grand_total',18,2);

    $table->decimal('paid_amount',18,2)->default(0);
    $table->decimal('due_amount',18,2)->default(0);

    $table->enum('payment_status',[
        'paid',
        'partial',
        'unpaid'
    ]);

    $table->enum('status',[
        'draft',
        'completed',
        'cancelled'
    ]);

    $table->timestamps();
    $table->softDeletes();
});
