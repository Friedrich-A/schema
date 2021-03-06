<?php
namespace Ixocreate\Schema;

/** @var ElementConfigurator $element */
use Ixocreate\Schema\Elements\DocumentElement;
use Ixocreate\Schema\Elements\AudioElement;
use Ixocreate\Schema\Elements\BlockContainerElement;
use Ixocreate\Schema\Elements\CheckboxElement;
use Ixocreate\Schema\Elements\CollectionElement;
use Ixocreate\Schema\Elements\ColorElement;
use Ixocreate\Schema\Elements\DateElement;
use Ixocreate\Schema\Elements\DateTimeElement;
use Ixocreate\Schema\Elements\GroupElement;
use Ixocreate\Schema\Elements\HtmlElement;
use Ixocreate\Schema\Elements\ImageElement;
use Ixocreate\Schema\Elements\LinkElement;
use Ixocreate\Schema\Elements\MapElement;
use Ixocreate\Schema\Elements\MediaElement;
use Ixocreate\Schema\Elements\MultiCheckboxElement;
use Ixocreate\Schema\Elements\MultiSelectElement;
use Ixocreate\Schema\Elements\NumberElement;
use Ixocreate\Schema\Elements\PriceElement;
use Ixocreate\Schema\Elements\RadioElement;
use Ixocreate\Schema\Elements\SectionElement;
use Ixocreate\Schema\Elements\SelectElement;
use Ixocreate\Schema\Elements\TabbedGroupElement;
use Ixocreate\Schema\Elements\TextareaElement;
use Ixocreate\Schema\Elements\TextElement;
use Ixocreate\Schema\Elements\VideoElement;
use Ixocreate\Schema\Elements\YouTubeElement;

$element->addElement(TextElement::class);
$element->addElement(TextareaElement::class);
$element->addElement(SelectElement::class);
$element->addElement(MultiSelectElement::class);
$element->addElement(RadioElement::class);
$element->addElement(NumberElement::class);
$element->addElement(MultiCheckboxElement::class);
$element->addElement(ImageElement::class);
$element->addElement(DateTimeElement::class);
$element->addElement(DateElement::class);
$element->addElement(ColorElement::class);
$element->addElement(SectionElement::class);
$element->addElement(GroupElement::class);
$element->addElement(LinkElement::class);
$element->addElement(HtmlElement::class);
$element->addElement(YouTubeElement::class);
$element->addElement(PriceElement::class);
$element->addElement(MapElement::class);
$element->addElement(BlockContainerElement::class);
$element->addElement(TabbedGroupElement::class);
$element->addElement(CollectionElement::class);
$element->addElement(CheckboxElement::class);
$element->addElement(DocumentElement::class);
$element->addElement(MediaElement::class);
$element->addElement(DocumentElement::class);
$element->addElement(AudioElement::class);
$element->addElement(VideoElement::class);