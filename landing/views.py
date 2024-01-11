from django.shortcuts import render
from django.views import generic

# Create your views here.
class LandingPageView(generic.ListView):
    """
    Class generates view landing page
    """

    template_name = "landing/index.html"

    def get(self, request, *args, **kwargs):
        """This method generates view of landing page"""
        return render(
            request,
            self.template_name,
            {
            },
        )