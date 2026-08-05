Schema::create('payments', function(Blueprint $table){

    $table->id();

    $table->foreignId('sale_id')->constrained()->cascadeOnDelete();

    $table->decimal('amount',18,2);

    $table->enum('method',[
        'cash',
        'zaad',
        'evc_plus',
        'sahal',
        'e_dahab',
        'bank'
    ]);

    $table->string('reference')->nullable();

    $table->timestamps();

});
