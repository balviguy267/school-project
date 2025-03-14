  <?php
class SchoolProject {
private $title;
private $description;
private $repoURL;
private $createdAt;

public function __construct($title, $description, $repoURL, $createdAt)
{
$this->title = $title;
$this->description = $description;
$this->repoURL = $repoURL;
$this->createdAt = $createdAt;
}

public function getTitle() {
return $this->title;
}

public function getDescription() {
return $this->description;
}

public function getRepoURL() {
return $this->repoURL;
}

public function getCreatedAt() {
return $this->createdAt;
}

public function setTitle($title) {
$this->title = $title;
}

public function setDescription($description) {
$this->description = $description;
}

public function setRepoURL($repoURL) {
$this->repoURL = $repoURL;
}

public function setCreatedAt($createdAt) {
$this->createdAt = $createdAt;
}
}
?>