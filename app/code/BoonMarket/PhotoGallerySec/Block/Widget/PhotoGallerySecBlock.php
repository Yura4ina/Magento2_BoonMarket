<?php
namespace BoonMarket\PhotoGallerySec\Block\Widget;

use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\UrlInterface;
use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;

class PhotoGallerySecBlock extends Template implements BlockInterface {

    const  DEFAULT_TEMPLATE = "widget/photo_gall.phtml";

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
    public function getSecTitle() {
        return $this->getData('sec_title');
    }

    /**
     * @return string
     * @throws NoSuchEntityException
     */
    public function getImage1() {
        $image = $this->getData('gall_image_1');
        $url = $this->_storeManager->getStore()->getBaseUrl(
                UrlInterface::URL_TYPE_MEDIA
            ) . $image;
        return $url;
    }

    /**
     * @return string
     * @throws NoSuchEntityException
     */
    public function getImage2() {
        $image = $this->getData('gall_image_2');
        $url = $this->_storeManager->getStore()->getBaseUrl(
                UrlInterface::URL_TYPE_MEDIA
            ) . $image;
        return $url;
    }

    /**
     * @return string
     * @throws NoSuchEntityException
     */
    public function getImage3() {
        $image = $this->getData('gall_image_3');
        $url = $this->_storeManager->getStore()->getBaseUrl(
                UrlInterface::URL_TYPE_MEDIA
            ) . $image;
        return $url;
    }

    /**
     * @return string
     * @throws NoSuchEntityException
     */
    public function getImage4() {
        $image = $this->getData('gall_image_4');
        $url = $this->_storeManager->getStore()->getBaseUrl(
                UrlInterface::URL_TYPE_MEDIA
            ) . $image;
        return $url;
    }

    /**
     * @return string
     * @throws NoSuchEntityException
     */
    public function getImage5() {
        $image = $this->getData('gall_image_5');
        $url = $this->_storeManager->getStore()->getBaseUrl(
                UrlInterface::URL_TYPE_MEDIA
            ) . $image;
        return $url;
    }

    /**
     * @return string
     * @throws NoSuchEntityException
     */
    public function getImage6() {
        $image = $this->getData('gall_image_6');
        $url = $this->_storeManager->getStore()->getBaseUrl(
                UrlInterface::URL_TYPE_MEDIA
            ) . $image;
        return $url;
    }

    /**
     * @return string
     * @throws NoSuchEntityException
     */
    public function getImage7() {
        $image = $this->getData('gall_image_7');
        $url = $this->_storeManager->getStore()->getBaseUrl(
                UrlInterface::URL_TYPE_MEDIA
            ) . $image;
        return $url;
    }

    /**
     * @return string
     * @throws NoSuchEntityException
     */
    public function getImage8() {
        $image = $this->getData('gall_image_8');
        $url = $this->_storeManager->getStore()->getBaseUrl(
                UrlInterface::URL_TYPE_MEDIA
            ) . $image;
        return $url;
    }

    /**
     * @return string
     * @throws NoSuchEntityException
     */
    public function getImage9() {
        $image = $this->getData('gall_image_9');
        $url = $this->_storeManager->getStore()->getBaseUrl(
                UrlInterface::URL_TYPE_MEDIA
            ) . $image;
        return $url;
    }

    /**
     * @return string
     * @throws NoSuchEntityException
     */
    public function getImage10() {
        $image = $this->getData('gall_image_10');
        $url = $this->_storeManager->getStore()->getBaseUrl(
                UrlInterface::URL_TYPE_MEDIA
            ) . $image;
        return $url;
    }

}
