const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]'); 
                        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl)); 

                        // Boxed Tooltip
                        \$(document).ready(function() {
                            \$('.tooltip-button').each(function () {
                                var tooltipButton = \$(this);
                                var tooltipContent = \$(this).siblings('.my-tooltip').html(); 
                        
                                // Initialize the tooltip
                                tooltipButton.tooltip({
                                    title: tooltipContent,
                                    trigger: 'hover',
                                    html: true
                                });
                        
                                // Optionally, reinitialize the tooltip if the content might change dynamically
                                tooltipButton.on('mouseenter', function() {
                                    tooltipButton.tooltip('dispose').tooltip({
                                        title: tooltipContent,
                                        trigger: 'hover',
                                        html: true
                                    }).tooltip('show');
                                });
                            });
                        });