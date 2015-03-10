<?php
class Repos extends AbstractCommand
{
    public function __invoke()
    {
        $list = $this->apiGetRepos();
        foreach ($list as $repo) {
            $tags = $this->apiGetTags($repo->name);
            $last = end($tags);
            $this->outln("$repo->name $last");
        }
    }
}