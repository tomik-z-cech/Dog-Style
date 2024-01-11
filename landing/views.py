from django.shortcuts import render
from django.views import generic

# Create your views here.
class LandingPageView(generic.ListView):
    template_name = "landing/index.html"

    def get(self, request, *args, **kwargs):
        """This method generates view of landing page"""
        return render(
            request,
            self.template_name,
            {
            },
        )
        
class GalleryPageView(generic.ListView):
    template_name = "landing/gallery.html"

    def get(self, request, *args, **kwargs):
        """This method generates view of gallery page"""
        return render(
            request,
            self.template_name,
            {
            },
        )
        
class ZoomPageView(generic.ListView):
    template_name = "landing/zoom.html"

    def get(self, request, *args, **kwargs):
        """This method generates view of gallery page"""
        return render(
            request,
            self.template_name,
            {
            },
        )

class ContactPageView(generic.ListView):
    template_name = "landing/contact.html"

    def get(self, request, *args, **kwargs):
        """This method generates view of contact page"""
        return render(
            request,
            self.template_name,
            {
            },
        )

class ServicesPageView(generic.ListView):
    template_name = "landing/services.html"

    def get(self, request, *args, **kwargs):
        """This method generates view of services page"""
        return render(
            request,
            self.template_name,
            {
            },
        )