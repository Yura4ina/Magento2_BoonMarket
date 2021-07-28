<?php
namespace BoonMarket\Sec6SlWidget\Block\Widget;

use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\UrlInterface;
use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;

class Sec6SlBlock extends Template implements BlockInterface {

    const  DEFAULT_TEMPLATE = "widget/sec6_sl.phtml";

    public function _construct() {
        if (!$this->hasData('template')) {
            $this->setData('template', self::DEFAULT_TEMPLATE);
        }

        return parent::_construct();
    }

    /**
     * @return string
     * @throws NoSuchEntityException
     */
    public function getFirstSlImage() {
        $image = $this->getData('f_sl_image');
        $url = $this->_storeManager->getStore()->getBaseUrl(
                UrlInterface::URL_TYPE_MEDIA
            ) . $image;
        return $url;
    }

    /**
     * @return string
     * @throws NoSuchEntityException
     */
    public function getFirstSlTitle() {
        return $this->getData('f_sl_title');
    }

    /**
     * @return string
     * @throws NoSuchEntityException
     */
    public function getFirstSlDescription() {
        return $this->getData('f_sl_description');
    }

    /**
     * @return string
     * @throws NoSuchEntityException
     */
    public function getFirstSlReadMore() {
        return $this->getData('f_sl_read_more');
    }

    /**
     * @return string
     * @throws NoSuchEntityException
     */
    public function getSecondSlImage() {
        $image = $this->getData('s_sl_image');
        $url = $this->_storeManager->getStore()->getBaseUrl(
                UrlInterface::URL_TYPE_MEDIA
            ) . $image;
        return $url;
    }

    /**
     * @return string
     * @throws NoSuchEntityException
     */
    public function getSecondSlTitle() {
        return $this->getData('s_sl_title');
    }

    /**
     * @return string
     * @throws NoSuchEntityException
     */
    public function getSecondSlDescription() {
        return $this->getData('s_sl_description');
    }

    /**
     * @return string
     * @throws NoSuchEntityException
     */
    public function getSecondSlReadMore() {
        return $this->getData('s_sl_read_more');
    }

    /**
     * @return string
     * @throws NoSuchEntityException
     */
    public function getThirdSlImage() {
        $image = $this->getData('t_sl_image');
        $url = $this->_storeManager->getStore()->getBaseUrl(
                UrlInterface::URL_TYPE_MEDIA
            ) . $image;
        return $url;
    }

    /**
     * @return string
     * @throws NoSuchEntityException
     */
    public function getThirdSlTitle() {
        return $this->getData('t_sl_title');
    }

    /**
     * @return string
     * @throws NoSuchEntityException
     */
    public function getThirdSlDescription() {
        return $this->getData('t_sl_description');
    }

    /**
     * @return string
     * @throws NoSuchEntityException
     */
    public function getThirdSlReadMore() {
        return $this->getData('t_sl_read_more');
    }
}
