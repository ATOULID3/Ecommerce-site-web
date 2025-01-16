<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation</title>
</head>
<body style="font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f8f9fa; color: #333;">
    <table width="100%" cellpadding="0" cellspacing="0" style="margin: 0; padding: 20px; background-color: #f8f9fa;">
        <tr>
            <td align="center">
                <table width="600" cellpadding="0" cellspacing="0" style="background: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
                    <!-- Header -->
                    <tr>
                        <td style="background: #28a745; color: #ffffff; text-align: center; padding: 20px;">
                            <h1 style="margin: 0; font-size: 24px;">Order Confirmation</h1>
                        </td>
                    </tr>
                    <!-- Body -->
                    <tr>
                        <td style="padding: 20px;">
                            <p style="font-size: 16px; margin: 0 0 20px;">
                                Dear <strong>{{ $order->customer_name }}</strong>,
                            </p>
                            <p style="font-size: 16px; margin: 0 0 20px;">
                                Thank you for your purchase! Below are the details of your order:
                            </p>

                            <!-- Order Summary -->
                            <table width="100%" cellpadding="0" cellspacing="0" style="margin: 20px 0; border-collapse: collapse;">
                                <tr>
                                    <td style="font-size: 16px; padding: 8px 0; border-bottom: 1px solid #e9ecef;">Order ID:</td>
                                    <td style="font-size: 16px; padding: 8px 0; border-bottom: 1px solid #e9ecef;">{{ $order->id }}</td>
                                </tr>
                                <tr>
                                    <td style="font-size: 16px; padding: 8px 0; border-bottom: 1px solid #e9ecef;">Order Date:</td>
                                    <td style="font-size: 16px; padding: 8px 0; border-bottom: 1px solid #e9ecef;">{{ $order->created_at->format('F j, Y') }}</td>
                                </tr>
                                <tr>
                                    <td style="font-size: 16px; padding: 8px 0; border-bottom: 1px solid #e9ecef;">Order Total:</td>
                                    <td style="font-size: 16px; padding: 8px 0; border-bottom: 1px solid #e9ecef;">${{ number_format($order->total_price, 2) }}</td>
                                </tr>
                                <tr>
                                    <td style="font-size: 16px; padding: 8px 0;">Quantity:</td>
                                    <td style="font-size: 16px; padding: 8px 0;">x{{ $order->quantity }}</td>
                                </tr>
                                <tr>
                                    <td style="font-size: 16px; padding: 8px 0;">Price:</td>
                                    <td style="font-size: 16px; padding: 8px 0;">${{ number_format($order->total_price, 2) }}</td>
                                </tr>
                            </table>

                            <!-- Call-to-Action -->
                            <div style="text-align: center; margin: 30px 0;">
                                <a href="{{ route('detail.order', $order->id) }}" style="display: inline-block; padding: 12px 24px; background: #28a745; color: #ffffff; text-decoration: none; border-radius: 4px; font-size: 16px;">View Your Order</a>
                            </div>

                            <!-- Support Section -->
                            <div style="margin-top: 20px; padding: 15px; background: #f1f1f1; border-radius: 4px; text-align: center;">
                                <p style="font-size: 14px; margin: 0;">
                                    Need help with your order? Contact us at
                                    <a href="mailto:support@example.com" style="color: #007bff; text-decoration: none;">support@example.com</a>.
                                </p>
                            </div>
                        </td>
                    </tr>
                    <!-- Footer -->
                    <tr>
                        <td style="background: #f8f9fa; text-align: center; padding: 10px; font-size: 14px; color: #6c757d;">
                            <p style="margin: 0;">&copy; {{ now()->year }} {{ config('app.name') }}. All rights reserved.</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
