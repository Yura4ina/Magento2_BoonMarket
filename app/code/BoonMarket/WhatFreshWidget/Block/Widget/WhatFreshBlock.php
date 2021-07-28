<?php
namespace BoonMarket\WhatFreshWidget\Block\Widget;

use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\UrlInterface;
use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;

class WhatFreshBlock extends Template implements BlockInterface {

    const  DEFAULT_TEMPLATE = "widget/what_fresh.phtml";

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
    public function getSectionTitle() {
        return $this->getData('sec_title');
    }

    /**
     * @return string
     * @throws NoSuchEntityException
     */
    public function getBigImageFirst() {
        $image = $this->getData('big_image_f');
        $url = $this->_storeManager->getStore()->getBaseUrl(
                UrlInterface::URL_TYPE_MEDIA
            ) . $image;
        return $url;
    }

    /**
     * @return string
     * @throws NoSuchEntityException
     */
    public function getTagFirst() {
        return $this->getData('tag_text_f');
    }

    /**
     * @return string
     * @throws NoSuchEntityException
     */
    public function getTitleFirst() {
        return $this->getData('rg_title_f');
    }

    /**
     * @return string
     * @throws NoSuchEntityException
     */
    public function getDescriptionFirst() {
        return $this->getData('description_f');
    }

    /**
     * @return string
     * @throws NoSuchEntityException
     */
    public function getButtonShopNowTextFirst() {
        return $this->getData('shop_now_text_f');
    }

    /**
     * @return string
     * @throws NoSuchEntityException
     */
    public function getBigImageSecond() {
        $image = $this->getData('big_image_s');
        $url = $this->_storeManager->getStore()->getBaseUrl(
                UrlInterface::URL_TYPE_MEDIA
            ) . $image;
        return $url;
    }

    /**
     * @return string
     * @throws NoSuchEntityException
     */
    public function getTagSecond() {
        return $this->getData('tag_text_s');
    }

    /**
     * @return string
     * @throws NoSuchEntityException
     */
    public function getTitleSecond() {
        return $this->getData('rg_title_s');
    }

    /**
     * @return string
     * @throws NoSuchEntityException
     */
    public function getDescriptionSecond() {
        return $this->getData('description_s');
    }

    /**
     * @return string
     * @throws NoSuchEntityException
     */
    public function getButtonShopNowTextSecond() {
        return $this->getData('shop_now_text_s');
    }

    /**
     * @return string
     * @throws NoSuchEntityException
     */
    public function getBigImageThird() {
        $image = $this->getData('big_image_t');
        $url = $this->_storeManager->getStore()->getBaseUrl(
                UrlInterface::URL_TYPE_MEDIA
            ) . $image;
        return $url;
    }

    /**
     * @return string
     * @throws NoSuchEntityException
     */
    public function getTagThird() {
        return $this->getData('tag_text_t');
    }

    /**
     * @return string
     * @throws NoSuchEntityException
     */
    public function getTitleThird() {
        return $this->getData('rg_title_t');
    }

    /**
     * @return string
     * @throws NoSuchEntityException
     */
    public function getDescriptionThird() {
        return $this->getData('description_t');
    }

    /**
     * @return string
     * @throws NoSuchEntityException
     */
    public function getButtonShopNowTextThird() {
        return $this->getData('shop_now_text_t');
    }

}
