<?php 
class VideoTest extends \Codeception\Test\Unit
{
    private $data = [
            "uri" =>"/videos/303975083",
            "name" => "Tutorial_2_docker-machine-create",
            "description" => null,
            "link" => "https://vimeo.com/303975083",
            "duration" => 455,
            "width" => 1848,
            "language" => null,
            "height" => 1080,
            "status" => "available"
        ];
    /**
     * @var \UnitTester
     */
    protected $tester;
    /**
     * @var \PFWD\Vimeo\Entity\Video|null
     */
    protected $entiity = null;

    public function _before()
    {
        $hydrator = new \PFWD\Vimeo\Hydrator\Type\Video();
        $hydrator->hydrate($this->data);
        $hydrator->getEntity();
        $entity = $hydrator->getEntity();
        $this->entiity = $entity;
    }

    /**
     * @group hydrator
     * @group hydrator-video
     * @group hydrator-video-name
     */
    public function testName()
    {
        $this->assertEquals($this->data['name'], $this->entiity->getName());
    }

    /**
     * @group hydrator
     * @group hydrator-video
     * @group hydrator-video-id
     */
    public function testID()
    {
        $this->assertEquals(303975083, $this->entiity->getID());
    }

    /**
     * @group hydrator
     * @group hydrator-video
     * @group hydrator-video-description
     */
    public function testDescription()
    {
        $this->assertEquals($this->data['description'], $this->entiity->getDescription());
    }

    /**
     * @group hydrator
     * @group hydrator-video
     * @group hydrator-video-link
     */
    public function testLink()
    {
        $this->assertEquals($this->data['link'], $this->entiity->getLink());
    }

    /**
     * @group hydrator
     * @group hydrator-video
     * @group hydrator-video-langauge
     */
    public function testLanguage()
    {
        $this->assertEquals($this->data['language'], $this->entiity->getLanguage());
    }

    /**
     * @group hydrator
     * @group hydrator-video
     * @group hydrator-video-duration
     */
    public function testDuration()
    {
        $this->assertEquals($this->data['duration'], $this->entiity->getDuration());
    }

    /**
     * @group hydrator
     * @group hydrator-video
     * @group hydrator-video-height
     */
    public function testHeight()
    {
        $this->assertEquals($this->data['height'], $this->entiity->getHeight());
    }

    /**
     * @group hydrator
     * @group hydrator-video
     * @group hydrator-video-width
     */
    public function testWidth()
    {
        $this->assertEquals($this->data['width'], $this->entiity->getWidth());
    }

    /**
     * @group hydrator
     * @group hydrator-video
     * @group hydrator-video-status
     */
    public function testStatus()
    {
        $this->assertEquals($this->data['status'], $this->entiity->getStatus());
    }
}