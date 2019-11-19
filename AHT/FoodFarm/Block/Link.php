<?php 
namespace AHT\FoodFarm\Block;

class Link extends \Magento\Framework\View\Element\Html\Link
{
    /**
     * Render block HTML.
     *
     * @return string
     */

    protected function _toHtml()
    {
        if (true == $this->getTemplate()) {
            return parent::_toHtml();
        } else {
            return '<li><a ' . $this->getLinkAttributes() . ' >' . $this->escapeHtml($this->getLabel()) . '</a></li>';
        } 
    }
}
