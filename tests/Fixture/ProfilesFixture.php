<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProfilesFixture
 *
 */
class ProfilesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'user_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => false, 'null' => true, 'default' => '0', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'profile_photo' => ['type' => 'text', 'length' => 4294967295.0, 'null' => true, 'default' => '\'0\'', 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'cover_photo' => ['type' => 'text', 'length' => 4294967295.0, 'null' => true, 'default' => '\'0\'', 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'position' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => '0', 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'experience' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => '0', 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'total_project' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => '0000000000', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'profit' => ['type' => 'float', 'length' => 0, 'precision' => 0, 'unsigned' => true, 'null' => true, 'default' => '000000000000', 'comment' => ''],
        'about_us' => ['type' => 'text', 'length' => 4294967295.0, 'null' => true, 'default' => '\'0\'', 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'current_project' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => '0', 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'user_id' => ['type' => 'unique', 'columns' => ['user_id'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'user_id' => 1,
            'profile_photo' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'cover_photo' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'position' => 'Lorem ipsum dolor sit amet',
            'experience' => 'Lorem ipsum dolor sit amet',
            'total_project' => 1,
            'profit' => 1,
            'about_us' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'current_project' => 'Lorem ipsum dolor sit amet',
            'modified' => '2017-08-03 13:23:58'
        ],
    ];
}
