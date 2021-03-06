<?php

namespace Ebay\Sell\Recommendation\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * A complex type that returns data related to Promoted Listings bid percentages.
 */
class BidPercentages extends AbstractModel
{
    /**
     * The basis by which the ad rate is calculated. Valid Values: ITEM and TRENDING
     * For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/recommendation/types/api:Basis'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $basis = null;

    /**
     * The bid percentage data is a single precision value, as calculated by the
     * associated basis. In Promoted listings ad campaigns, the bid percentage (also
     * known as the ad rate) is a user-defined value that sets the level that eBay
     * raises the visibility of the listing in the marketplace. It is also the rate
     * that is used to calculate the Promoted Listings fee. Minimum value: 1.0 &nbsp;
     * Maximum value: 100.0.
     *
     * @var string
     */
    public $value = null;
}
