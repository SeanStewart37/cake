<?php
use Phinx\Seed\AbstractSeed;

/**
 * Cakes seed.
 */
class CakesSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'type' => 'Vanilla',
                'occasion' => 'Wedding',
                'layers' => 3,
                'icing' => 'White Cream',
                'description' => 'Beautiful white vanilla cake for the perfect wedding.'
            ],
            [
                'type' => 'German Chocolate',
                'occasion' => 'Any',
                'layers' => 1,
                'icing' => 'Chocolate & Coconut',
                'description' => 'German chocolate cake meant for any occasion.'
            ],
            [
                'type' => 'Strawberry',
                'occasion' => 'Birthday',
                'layers' => 1,
                'icing' => 'White Cream & Sprinkles',
                'description' => 'The perfect birthday cake for any child.'
            ]
        ];

        $table = $this->table('cakes');
        $table->insert($data)->save();
    }
}
