<?php
declare(strict_types=1);

namespace StudioMitte\CartCount\Middleware;

use Extcode\Cart\Domain\Model\Cart\Cart;
use Extcode\Cart\Service\SessionHandler;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;
use TYPO3\CMS\Core\Http\Response;
use TYPO3\CMS\Core\Http\Stream;
use TYPO3\CMS\Core\Utility\GeneralUtility;

class CartCounter implements MiddlewareInterface
{
    /**
     * @param ServerRequestInterface $request
     * @param RequestHandlerInterface $handler
     * @return ResponseInterface
     */
    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        $checkoutId = $this->getCheckoutId($request);
        if ($checkoutId) {
            $sessionHandler = GeneralUtility::makeInstance(SessionHandler::class);
            $cart = $sessionHandler->restore($checkoutId);
            $info = [];
            if ($cart instanceof Cart) {
                $info = $this->getCartInformation($cart);
            }

            $body = new Stream('php://temp', 'rw');
            $body->write(json_encode($info));

            return (new Response())
                ->withHeader('content-type', 'text/json; charset=utf-8')
                ->withBody($body)
                ->withStatus(200);
        }

        return $handler->handle($request);
    }

    protected function getCartInformation(Cart $cart): array
    {
        $data = [
            'net' => $cart->getNet(),
            'gross' => $cart->getGross(),
            'count' => $cart->getCount(),
        ];
        foreach ($cart->getProducts() as $product) {
            $simpleProduct = [
                'title' => $product->getTitle(),
                'sku' => $product->getSku(),
                'net' => $product->getNet(),
                'gross' => $product->getGross(),
                'quantity' => $product->getQuantity(),
            ];
            $data['products'][] = $simpleProduct;
        }
        return $data;
    }

    protected function getCheckoutId(ServerRequestInterface $request): int
    {
        return (int)($request->getQueryParams()['cartId'] ?? 0);
    }

}
