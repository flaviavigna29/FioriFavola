<?php

use App\Models\Category;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->string('img');
            $table->timestamps();
        });

        $categories = ['Piante', 'Cura e difesa', 'Bellezza vitale', 'Terricci e substrati', 'Attrezzi da lavoro', 'Vasi per piante'];

        $descriptions = [
            'Desideri che le tue piante prosperino? Trova tutto ciò di cui hai bisogno per prenderti cura delle tue piante con il nostro equipaggiamento completo e di qualità. Scopri i migliori prodotti testati e selezionati per garantire la salute e la vitalità delle tue piante!',

            'Hai bisogno di un equipaggiamento completo e di qualità per difendere e curare gli ambienti e le piante di casa? Niente paura… sei nel posto giusto! Scopri tutti i prodotti che abbiamo testato e selezionato per te e che ti renderanno
            vincente!',

            'In questa categoria trovi tutto ciò che serve alle tue piante per crescere forti e vigorose... Parliamo di concimi e fitostimolanti',

            'In questa categoria trovi tutti i terricci, substrati e torbe professionali di
            nostra produzione, prodotti finiti e pronti all\'uso di altissima qualità, adatti
            a tutte le piante che trovi sul nostro shop!',

            'Hai bisogno di un alleato per tenere in ordine il tuo giardino? Scopri gli
            strumenti che abbiamo selezionato per te, con caratteristiche di qualità e di
            durata nel tempo. Con il giusto attrezzo far giardinaggio diventerà comodo e
            piacevole…un gioco da ragazzi',

            'Cerchi i migliori vasi per le tue piante? Abbiamo ciò di cui hai bisogno! Scopri la nostra selezione di vasi di alta qualità per valorizzare al meglio le tue piante. Trova il vaso perfetto per il tuo stile e le tue esigenze e trasforma i tuoi spazi in ambienti accoglienti e armoniosi!'
        ];

        $images = [
            'media/categorie/piante.png',
            'media/categorie/cura.png',
            'media/categorie/bellezza.png',
            'media/categorie/terricci.png',
            'media/categorie/attrezzi.png',
            'media/categorie/vasi.png',
        ];

        foreach ($categories as $index => $category) {
            Category::create([
                'name' => $category,
                'description' => $descriptions[$index],
                'img' => $images[$index]
            ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
