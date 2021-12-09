<?php

namespace panlatent\craft\credentials;

class Plugin extends \craft\base\Plugin
{
    // Properties
    // =========================================================================

    /**
     * @var Plugin
     */
    public static $plugin;

    /**
     * @var string
     */
    public $schemaVersion = '0.1.0';

    /**
     * @var string
     */
    public $t9nCategory = 'credentials';

    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function __construct($id, $parent = null, array $config = [])
    {
        self::$plugin = $this;
        parent::__construct($id, $parent, $config);
    }

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
    }
}