<?php
namespace Symfony\Component\VarDumper\Caster;

/**
 * @author Grégoire Pineau <lyrixx@lyrixx.info>
 */
class ImgStub extends ConstStub
{
    public function __construct(string $data, string $contentType, string $size = '')
    {
        $this->value = '';
        $this->attr['img-data'] = $data;
        $this->attr['img-size'] = $size;
        $this->attr['content-type'] = $contentType;
    }
}
